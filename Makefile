jsframeworks = scripts/framework.js
jsfiles = $(wildcard scripts/src/*.js)

themefiles = *.php screenshot.jpg style.css languages/ sass/fonts/* sass/third-party/* scripts/third-party/* imgs/*
version = $(shell sed -n "/^Version:/{s/.*: *//p}" style.css)
build_dir = _build

zipfile = $(build_dir)/grupos2theme$(shell sed -n "/^Version:/{s/.*: *//;s/\.//gp}" style.css).zip
current_server_folder = grupos2theme1817



run_all_bell: run_all
	notify-send -u normal "Make: complete" "[sass; js]: compile done"

run_all: compile_sass_embedded_into_header minify_js

compile_sass_embedded_into_header:
	sass -r 'compass/import-once/activate' --no-cache --sourcemap=none sass/global.scss:style.min.css --style compressed
	postcss --no-map false style.min.css -ru autoprefixer
	sudo sed -i '/<style>/,/<\/style>/{//!d}' header.php
	sudo sed -i '/<style>/ r style.min.css' header.php

minify_js: $(jsfiles)
	minify -o scripts/min/script.min.js $(jsframeworks) $^
	sudo sed -i "/<script type='text\/javascript'>$$/,/<\/script>/{//!d}" footer.php
	sudo sed -i "/<script type='text\/javascript'>$$/ r scripts/min/script.min.js" footer.php

debug: minify_js
	sass --no-cache --sourcemap=none sass/global.scss:style.min.css --style compressed
	sudo sed -i '/<style>/,/<\/style>/{//!d}' header.php
	sudo sed -i '/<style>/ r style.min.css' header.php

deploy: run_all
	mkdir -p $(build_dir)
	rm -rf $(build_dir)/*
	zip $(zipfile) $(themefiles)
	unzip -u $(zipfile) -d $(build_dir)
	rm $(zipfile)
	@echo "\n======\n\n\tUpload preparation done\n\n\n"
	printf 'cd grupos2mkt.com.APIKIWPHOST/wp-content/themes/\n\
		put -rp $(build_dir)\n\
		rename $(current_server_folder) gs2themeOLD\n\
		rename $(build_dir) $(current_server_folder)\n\
		quit\n' \
	| sftp -P22 grupos2mkt_ps@34.225.176.19
	ssh -p22 grupos2mkt_ps@34.225.176.19 'rm -rf grupos2mkt.com.APIKIWPHOST/wp-content/themes/gs2themeOLD'
	@#rsync -rzp -e 'ssh -p 22' --progress ./_build/ grupos2mkt_ps@34.225.176.19:/home/grupos2mkt_ps/grupos2mkt.com.APIKIWPHOST/wp-content/themes/gs2theme
	@notify-send -u normal "Make: upload done" "[sass; js; upload]: process complete"
