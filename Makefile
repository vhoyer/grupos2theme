jsframeworks = scripts/framework.js
jsfiles = $(wildcard scripts/src/*.js)

zipfiles = *.php screenshot.jpg style.css languages/ sass/fonts/* sass/third-party/* scripts/third-party/* imgs/*
version = $(shell sed -n "/^Version:/{s/.*: *//p}" style.css)
build_dir = _build

themefile = $(build_dir)/grupos2theme$(shell sed -n "/^Version:/{s/.*: *//;s/\.//gp}" style.css).zip





run_all: compile_sass_embedded_into_header minify_js

compile_sass_embedded_into_header:
	sass --no-cache --sourcemap=none sass/global.scss:style.min.css --style compressed
	postcss --no-map false style.min.css -ru autoprefixer
	sudo sed -i '/<style>/,/<\/style>/{//!d}' header.php
	sudo sed -i '/<style>/ r style.min.css' header.php

minify_js: $(jsfiles)
	minify -o scripts/min/script.min.js $(jsframeworks) $^
	sudo sed -i "/<script type='text\/javascript'>$$/,/<\/script>/{//!d}" footer.php
	sudo sed -i "/<script type='text\/javascript'>$$/ r scripts/min/script.min.js" footer.php

deploy: run_all
	mkdir -p $(build_dir)
	zip $(themefile) $(zipfiles)
	git add -A
	git commit -sm"grupos2theme v$(version)"
	@echo "\n======\n\n\tCompressing done!\n\tOutput file: $(themefile)\n\n\n"
