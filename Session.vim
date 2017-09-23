let SessionLoad = 1
if &cp | set nocp | endif
let s:cpo_save=&cpo
set cpo&vim
inoremap <Plug>(emmet-anchorize-summary) =emmet#util#closePopup()=emmet#anchorizeURL(1)
inoremap <Plug>(emmet-anchorize-url) =emmet#util#closePopup()=emmet#anchorizeURL(0)
inoremap <Plug>(emmet-remove-tag) =emmet#util#closePopup()=emmet#removeTag()
inoremap <Plug>(emmet-split-join-tag) :call emmet#splitJoinTag()
inoremap <Plug>(emmet-toggle-comment) =emmet#util#closePopup()=emmet#toggleComment()
inoremap <Plug>(emmet-image-size) =emmet#util#closePopup()=emmet#imageSize()
inoremap <Plug>(emmet-move-prev-item) :call emmet#moveNextPrevItem(1)
inoremap <Plug>(emmet-move-next-item) :call emmet#moveNextPrevItem(0)
inoremap <Plug>(emmet-move-prev) :call emmet#moveNextPrev(1)
inoremap <Plug>(emmet-move-next) :call emmet#moveNextPrev(0)
inoremap <Plug>(emmet-balance-tag-outword) :call emmet#balanceTag(-1)
inoremap <Plug>(emmet-balance-tag-inward) :call emmet#balanceTag(1)
inoremap <Plug>(emmet-update-tag) =emmet#util#closePopup()=emmet#updateTag()
inoremap <Plug>(emmet-expand-word) =emmet#util#closePopup()=emmet#expandAbbr(1,"")
inoremap <Plug>(emmet-expand-abbr) =emmet#util#closePopup()=emmet#expandAbbr(0,"")
inoremap <silent> <Plug>(table-mode-tableize) |:call tablemode#TableizeInsertMode()a
inoremap <silent> <C-Tab> =UltiSnips#ListSnippets()
inoremap <silent> <Nul> =UltiSnips#ExpandSnippet()
inoremap <silent> <Plug>NERDCommenterInsert  <BS>:call NERDComment('i', "insert")
vmap c <Plug>(emmet-code-pretty)
vmap m <Plug>(emmet-merge-lines)
nmap A <Plug>(emmet-anchorize-summary)
nmap a <Plug>(emmet-anchorize-url)
nmap k <Plug>(emmet-remove-tag)
nmap j <Plug>(emmet-split-join-tag)
nmap / <Plug>(emmet-toggle-comment)
nmap i <Plug>(emmet-image-size)
nmap N <Plug>(emmet-move-prev)
nmap n <Plug>(emmet-move-next)
vmap D <Plug>(emmet-balance-tag-outword)
nmap D <Plug>(emmet-balance-tag-outword)
vmap d <Plug>(emmet-balance-tag-inward)
nmap d <Plug>(emmet-balance-tag-inward)
nmap u <Plug>(emmet-update-tag)
nmap ; <Plug>(emmet-expand-word)
vmap e <Plug>(emmet-expand-abbr)
nmap e <Plug>(emmet-expand-abbr)
noremap  2
xnoremap  :cp
nnoremap  :cp
snoremap <silent>  c
onoremap  :cp
noremap <NL> :bp
noremap  :bn
noremap  :cn
nnoremap <silent>  :CtrlP
noremap  2
snoremap  "_c
nnoremap  l $
nmap  ? <Plug>MarkSearchAnyPrev
nmap  / <Plug>MarkSearchAnyNext
nmap  # <Plug>MarkSearchCurrentPrev
nmap  * <Plug>MarkSearchCurrentNext
xmap  T <Plug>(table-mode-tableize-delimiter)
xmap  tt <Plug>(table-mode-tableize)
nmap  tt <Plug>(table-mode-tableize)
nnoremap <silent>  tm :call tablemode#Toggle()
nnoremap <silent>  w :Bclose
nmap  ca <Plug>NERDCommenterAltDelims
xmap  cu <Plug>NERDCommenterUncomment
nmap  cu <Plug>NERDCommenterUncomment
xmap  cb <Plug>NERDCommenterAlignBoth
nmap  cb <Plug>NERDCommenterAlignBoth
xmap  cl <Plug>NERDCommenterAlignLeft
nmap  cl <Plug>NERDCommenterAlignLeft
nmap  cA <Plug>NERDCommenterAppend
xmap  cy <Plug>NERDCommenterYank
nmap  cy <Plug>NERDCommenterYank
xmap  cs <Plug>NERDCommenterSexy
nmap  cs <Plug>NERDCommenterSexy
xmap  ci <Plug>NERDCommenterInvert
nmap  ci <Plug>NERDCommenterInvert
nmap  c$ <Plug>NERDCommenterToEOL
xmap  cn <Plug>NERDCommenterNested
nmap  cn <Plug>NERDCommenterNested
xmap  cm <Plug>NERDCommenterMinimal
nmap  cm <Plug>NERDCommenterMinimal
xmap  c  <Plug>NERDCommenterToggle
nmap  c  <Plug>NERDCommenterToggle
xmap  cc <Plug>NERDCommenterComment
nmap  cc <Plug>NERDCommenterComment
vmap   r <Plug>MarkRegex
nmap   r <Plug>MarkRegex
nmap   n <Plug>MarkClear
vmap   m <Plug>MarkSet
nmap   m <Plug>MarkSet
map  n :NERDTreeToggle
nnoremap  EE :qa!
nnoremap  ee :qa
nnoremap  E :q!
nnoremap  e :q
nnoremap  QQ :bd!
nnoremap  Q :Bclose!
nnoremap  qq :bd
nnoremap  q :Bclose
nnoremap  W :set wrap!
nnoremap  r my:e!`y
nnoremap  gg :Gcommit -s
noremap  p :CtrlP
noremap  S :w!
noremap  s :w
noremap  m :only
noremap  g `
noremap  y "+y
nnoremap  L <Right>
nnoremap  K <Up>
nnoremap  J <Down>
nnoremap  H <Left>
vnoremap  l $<Left>
onoremap  l $
noremap  h ^
noremap  cw 1z=
vnoremap  f zf
nnoremap  f za
noremap    .
noremap  | :split
noremap  \ :vsplit
nmap # <Plug>MarkSearchPrev
nmap * <Plug>MarkSearchNext
noremap + :cw
noremap - :ccl
noremap == mygg=G`y
noremap CA mygg"+yG`y
cnoremap çç 
cnoremap Ç 
noremap JJ ik$
noremap Q <Nop>
xmap S <Plug>VSurround
noremap VV ^v$h
noremap Y y$
nmap cS <Plug>CSurround
nmap cs <Plug>Csurround
nmap ds <Plug>Dsurround
vmap gx <Plug>NetrwBrowseXVis
nmap gx <Plug>NetrwBrowseX
xmap gS <Plug>VgSurround
noremap j gj
noremap k gk
vnoremap s :s/
vnoremap v 
nmap ySS <Plug>YSsurround
nmap ySs <Plug>YSsurround
nmap yss <Plug>Yssurround
nmap yS <Plug>YSurround
nmap ys <Plug>Ysurround
vnoremap ~ y:call setreg('', TwiddleCase(@"), getregtype(''))gv""Pgvl
nnoremap ~ g~
noremap <silent> <Plug>AirlineSelectNextTab :exe repeat(':tabn|', v:count1)
noremap <silent> <Plug>AirlineSelectPrevTab gT
noremap <silent> <Plug>AirlineSelectTab9 :9tabn
noremap <silent> <Plug>AirlineSelectTab8 :8tabn
noremap <silent> <Plug>AirlineSelectTab7 :7tabn
noremap <silent> <Plug>AirlineSelectTab6 :6tabn
noremap <silent> <Plug>AirlineSelectTab5 :5tabn
noremap <silent> <Plug>AirlineSelectTab4 :4tabn
noremap <silent> <Plug>AirlineSelectTab3 :3tabn
noremap <silent> <Plug>AirlineSelectTab2 :2tabn
noremap <silent> <Plug>AirlineSelectTab1 :1tabn
vnoremap <silent> <Plug>NetrwBrowseXVis :call netrw#BrowseXVis()
nnoremap <silent> <Plug>NetrwBrowseX :call netrw#BrowseX(expand((exists("g:netrw_gx")? g:netrw_gx : '<cfile>')),netrw#CheckIfRemote())
vnoremap <Plug>(emmet-code-pretty) :call emmet#codePretty()
vnoremap <Plug>(emmet-merge-lines) :call emmet#mergeLines()
nnoremap <Plug>(emmet-anchorize-summary) :call emmet#anchorizeURL(1)
nnoremap <Plug>(emmet-anchorize-url) :call emmet#anchorizeURL(0)
nnoremap <Plug>(emmet-remove-tag) :call emmet#removeTag()
nnoremap <Plug>(emmet-split-join-tag) :call emmet#splitJoinTag()
nnoremap <Plug>(emmet-toggle-comment) :call emmet#toggleComment()
nnoremap <Plug>(emmet-image-size) :call emmet#imageSize()
nnoremap <Plug>(emmet-move-prev-item) :call emmet#moveNextPrevItem(1)
nnoremap <Plug>(emmet-move-next-item) :call emmet#moveNextPrevItem(0)
nnoremap <Plug>(emmet-move-prev) :call emmet#moveNextPrev(1)
nnoremap <Plug>(emmet-move-next) :call emmet#moveNextPrev(0)
vnoremap <Plug>(emmet-balance-tag-outword) :call emmet#balanceTag(-2)
nnoremap <Plug>(emmet-balance-tag-outword) :call emmet#balanceTag(-1)
vnoremap <Plug>(emmet-balance-tag-inward) :call emmet#balanceTag(2)
nnoremap <Plug>(emmet-balance-tag-inward) :call emmet#balanceTag(1)
nnoremap <Plug>(emmet-update-tag) :call emmet#updateTag()
nnoremap <Plug>(emmet-expand-word) :call emmet#expandAbbr(1,"")
vnoremap <Plug>(emmet-expand-abbr) :call emmet#expandAbbr(2,"")
nnoremap <Plug>(emmet-expand-abbr) :call emmet#expandAbbr(3,"")
nmap <C-k9> <Plug>MarkSearchGroup9Prev
nnoremap <silent> <Plug>MarkSearchGroup9Prev :call mark#SearchGroupMark(9, v:count1, 1, 1)
nmap <k9> <Plug>MarkSearchGroup9Next
nnoremap <silent> <Plug>MarkSearchGroup9Next :call mark#SearchGroupMark(9, v:count1, 0, 1)
nmap <C-k8> <Plug>MarkSearchGroup8Prev
nnoremap <silent> <Plug>MarkSearchGroup8Prev :call mark#SearchGroupMark(8, v:count1, 1, 1)
nmap <k8> <Plug>MarkSearchGroup8Next
nnoremap <silent> <Plug>MarkSearchGroup8Next :call mark#SearchGroupMark(8, v:count1, 0, 1)
nmap <C-k7> <Plug>MarkSearchGroup7Prev
nnoremap <silent> <Plug>MarkSearchGroup7Prev :call mark#SearchGroupMark(7, v:count1, 1, 1)
nmap <k7> <Plug>MarkSearchGroup7Next
nnoremap <silent> <Plug>MarkSearchGroup7Next :call mark#SearchGroupMark(7, v:count1, 0, 1)
nmap <C-k6> <Plug>MarkSearchGroup6Prev
nnoremap <silent> <Plug>MarkSearchGroup6Prev :call mark#SearchGroupMark(6, v:count1, 1, 1)
nmap <k6> <Plug>MarkSearchGroup6Next
nnoremap <silent> <Plug>MarkSearchGroup6Next :call mark#SearchGroupMark(6, v:count1, 0, 1)
nmap <C-k5> <Plug>MarkSearchGroup5Prev
nnoremap <silent> <Plug>MarkSearchGroup5Prev :call mark#SearchGroupMark(5, v:count1, 1, 1)
nmap <k5> <Plug>MarkSearchGroup5Next
nnoremap <silent> <Plug>MarkSearchGroup5Next :call mark#SearchGroupMark(5, v:count1, 0, 1)
nmap <C-k4> <Plug>MarkSearchGroup4Prev
nnoremap <silent> <Plug>MarkSearchGroup4Prev :call mark#SearchGroupMark(4, v:count1, 1, 1)
nmap <k4> <Plug>MarkSearchGroup4Next
nnoremap <silent> <Plug>MarkSearchGroup4Next :call mark#SearchGroupMark(4, v:count1, 0, 1)
nmap <C-k3> <Plug>MarkSearchGroup3Prev
nnoremap <silent> <Plug>MarkSearchGroup3Prev :call mark#SearchGroupMark(3, v:count1, 1, 1)
nmap <k3> <Plug>MarkSearchGroup3Next
nnoremap <silent> <Plug>MarkSearchGroup3Next :call mark#SearchGroupMark(3, v:count1, 0, 1)
nmap <C-k2> <Plug>MarkSearchGroup2Prev
nnoremap <silent> <Plug>MarkSearchGroup2Prev :call mark#SearchGroupMark(2, v:count1, 1, 1)
nmap <k2> <Plug>MarkSearchGroup2Next
nnoremap <silent> <Plug>MarkSearchGroup2Next :call mark#SearchGroupMark(2, v:count1, 0, 1)
nmap <C-k1> <Plug>MarkSearchGroup1Prev
nnoremap <silent> <Plug>MarkSearchGroup1Prev :call mark#SearchGroupMark(1, v:count1, 1, 1)
nmap <k1> <Plug>MarkSearchGroup1Next
nnoremap <silent> <Plug>MarkSearchGroup1Next :call mark#SearchGroupMark(1, v:count1, 0, 1)
nnoremap <silent> <Plug>MarkSearchGroupPrev :call mark#SearchGroupMark(v:count, 1, 1, 1)
nnoremap <silent> <Plug>MarkSearchGroupNext :call mark#SearchGroupMark(v:count, 1, 0, 1)
nnoremap <silent> <Plug>MarkSearchOrAnyPrev :if !mark#SearchNext(1,'mark#SearchAnyMark')|execute 'normal! #zv'|endif
nnoremap <silent> <Plug>MarkSearchOrAnyNext :if !mark#SearchNext(0,'mark#SearchAnyMark')|execute 'normal! *zv'|endif
nnoremap <silent> <Plug>MarkSearchOrCurPrev :if !mark#SearchNext(1,'mark#SearchCurrentMark')|execute 'normal! #zv'|endif
nnoremap <silent> <Plug>MarkSearchOrCurNext :if !mark#SearchNext(0,'mark#SearchCurrentMark')|execute 'normal! *zv'|endif
nnoremap <silent> <Plug>MarkSearchPrev :if !mark#SearchNext(1)|execute 'normal! #zv'|endif
nnoremap <silent> <Plug>MarkSearchNext :if !mark#SearchNext(0)|execute 'normal! *zv'|endif
nnoremap <silent> <Plug>MarkSearchAnyPrev :call mark#SearchAnyMark(1)
nnoremap <silent> <Plug>MarkSearchAnyNext :call mark#SearchAnyMark(0)
nnoremap <silent> <Plug>MarkSearchCurrentPrev :call mark#SearchCurrentMark(1)
nnoremap <silent> <Plug>MarkSearchCurrentNext :call mark#SearchCurrentMark(0)
nnoremap <silent> <Plug>MarkToggle :call mark#Toggle()
nnoremap <silent> <Plug>MarkConfirmAllClear :if confirm('Really delete all marks? This cannot be undone.', "&Yes\n&No") == 1|call mark#ClearAll()|endif
nnoremap <silent> <Plug>MarkAllClear :call mark#ClearAll()
nnoremap <silent> <Plug>MarkClear :if !mark#DoMark(v:count, (v:count ? '' : mark#CurrentMark()[0]))[0]|execute "normal! \<C-\>\<C-n>\<Esc>"|endif
vnoremap <silent> <Plug>MarkRegex :if !mark#MarkRegex(v:count, mark#GetVisualSelectionAsRegexp())|execute "normal! \<C-\>\<C-n>\<Esc>"|if ! empty(v:errmsg)|echoerr v:errmsg|endif|endif
nnoremap <silent> <Plug>MarkRegex :if !mark#MarkRegex(v:count, '')|execute "normal! \<C-\>\<C-n>\<Esc>"|if ! empty(v:errmsg)|echoerr v:errmsg|endif|endif
vnoremap <silent> <Plug>MarkIWhiteSet :if !mark#DoMark(v:count, mark#GetVisualSelectionAsLiteralWhitespaceIndifferentPattern())[0]|execute "normal! \<C-\>\<C-n>\<Esc>"|endif
vnoremap <silent> <Plug>MarkSet :if !mark#DoMark(v:count, mark#GetVisualSelectionAsLiteralPattern())[0]|execute "normal! \<C-\>\<C-n>\<Esc>"|endif
nnoremap <silent> <Plug>MarkSet :if !mark#MarkCurrentWord(v:count)|execute "normal! \<C-\>\<C-n>\<Esc>"|endif
nnoremap <silent> <Plug>(table-mode-sort) :call tablemode#spreadsheet#Sort('')
nnoremap <silent> <Plug>(table-mode-eval-formula) :call tablemode#spreadsheet#formula#EvaluateFormulaLine()
nnoremap <silent> <Plug>(table-mode-add-formula) :call tablemode#spreadsheet#formula#Add()
nnoremap <silent> <Plug>(table-mode-delete-column) :call tablemode#spreadsheet#DeleteColumn()
nnoremap <silent> <Plug>(table-mode-delete-row) :call tablemode#spreadsheet#DeleteRow()
xnoremap <silent> <Plug>(table-mode-cell-text-object-i) :call tablemode#spreadsheet#cell#TextObject(1)
xnoremap <silent> <Plug>(table-mode-cell-text-object-a) :call tablemode#spreadsheet#cell#TextObject(0)
onoremap <silent> <Plug>(table-mode-cell-text-object-i) :call tablemode#spreadsheet#cell#TextObject(1)
onoremap <silent> <Plug>(table-mode-cell-text-object-a) :call tablemode#spreadsheet#cell#TextObject(0)
nnoremap <silent> <Plug>(table-mode-motion-right) :call tablemode#spreadsheet#cell#Motion('l')
nnoremap <silent> <Plug>(table-mode-motion-left) :call tablemode#spreadsheet#cell#Motion('h')
nnoremap <silent> <Plug>(table-mode-motion-down) :call tablemode#spreadsheet#cell#Motion('j')
nnoremap <silent> <Plug>(table-mode-motion-up) :call tablemode#spreadsheet#cell#Motion('k')
nnoremap <silent> <Plug>(table-mode-realign) :call tablemode#table#Realign('.')
xnoremap <silent> <Plug>(table-mode-tableize-delimiter) :call tablemode#TableizeByDelimiter()
xnoremap <silent> <Plug>(table-mode-tableize) :Tableize
nnoremap <silent> <Plug>(table-mode-tableize) :Tableize
nnoremap <silent> <Plug>SurroundRepeat .
snoremap <silent> <Del> c
snoremap <silent> <BS> c
snoremap <silent> <C-Tab> :call UltiSnips#ListSnippets()
xnoremap <silent> <Nul> :call UltiSnips#SaveLastVisualSelection()gvs
snoremap <silent> <Nul> :call UltiSnips#ExpandSnippet()
xnoremap <silent> <Plug>NERDCommenterUncomment :call NERDComment("x", "Uncomment")
nnoremap <silent> <Plug>NERDCommenterUncomment :call NERDComment("n", "Uncomment")
xnoremap <silent> <Plug>NERDCommenterAlignBoth :call NERDComment("x", "AlignBoth")
nnoremap <silent> <Plug>NERDCommenterAlignBoth :call NERDComment("n", "AlignBoth")
xnoremap <silent> <Plug>NERDCommenterAlignLeft :call NERDComment("x", "AlignLeft")
nnoremap <silent> <Plug>NERDCommenterAlignLeft :call NERDComment("n", "AlignLeft")
nnoremap <silent> <Plug>NERDCommenterAppend :call NERDComment("n", "Append")
xnoremap <silent> <Plug>NERDCommenterYank :call NERDComment("x", "Yank")
nnoremap <silent> <Plug>NERDCommenterYank :call NERDComment("n", "Yank")
xnoremap <silent> <Plug>NERDCommenterSexy :call NERDComment("x", "Sexy")
nnoremap <silent> <Plug>NERDCommenterSexy :call NERDComment("n", "Sexy")
xnoremap <silent> <Plug>NERDCommenterInvert :call NERDComment("x", "Invert")
nnoremap <silent> <Plug>NERDCommenterInvert :call NERDComment("n", "Invert")
nnoremap <silent> <Plug>NERDCommenterToEOL :call NERDComment("n", "ToEOL")
xnoremap <silent> <Plug>NERDCommenterNested :call NERDComment("x", "Nested")
nnoremap <silent> <Plug>NERDCommenterNested :call NERDComment("n", "Nested")
xnoremap <silent> <Plug>NERDCommenterMinimal :call NERDComment("x", "Minimal")
nnoremap <silent> <Plug>NERDCommenterMinimal :call NERDComment("n", "Minimal")
xnoremap <silent> <Plug>NERDCommenterToggle :call NERDComment("x", "Toggle")
nnoremap <silent> <Plug>NERDCommenterToggle :call NERDComment("n", "Toggle")
xnoremap <silent> <Plug>NERDCommenterComment :call NERDComment("x", "Comment")
nnoremap <silent> <Plug>NERDCommenterComment :call NERDComment("n", "Comment")
nnoremap <SNR>18_: :=v:count ? v:count : ''
noremap <F8> :so $MYVIMRC
map <S-F12> :bd ~/.vimrc:bd ~/.plugins.vim
map <F12> :tabe ~/.plugins.vim:vsplit $MYVIMRC
nnoremap <BS> i<BS><Right>
noremap <F10> :UltiSnipsEdit
nmap <F7> :Git add -A .:Gcommit -sa
noremap <F4> :b#
noremap <F3> :tabNext
noremap <F2> :tabprevious
noremap <S-F9> :bd Makefile
noremap <F9> :e Makefile
noremap <C-F5> :wa:make %:r:cw
noremap <S-F5> :wa:make 
noremap <F5> :wa:make:cw
nnoremap <Right> >
nnoremap <Left> <
nnoremap <Down> -
nnoremap <Up> +
imap A <Plug>(emmet-anchorize-summary)
imap a <Plug>(emmet-anchorize-url)
imap k <Plug>(emmet-remove-tag)
imap j <Plug>(emmet-split-join-tag)
imap / <Plug>(emmet-toggle-comment)
imap i <Plug>(emmet-image-size)
imap N <Plug>(emmet-move-prev)
imap n <Plug>(emmet-move-next)
imap D <Plug>(emmet-balance-tag-outword)
imap d <Plug>(emmet-balance-tag-inward)
imap u <Plug>(emmet-update-tag)
imap ; <Plug>(emmet-expand-word)
imap e <Plug>(emmet-expand-abbr)
imap S <Plug>ISurround
imap s <Plug>Isurround
imap  <Plug>Isurround
inoremap <expr> [200~ XTermPasteBegin()
inoremap "" ""<Left>
inoremap " "
inoremap '' ""<Left>
inoremap ((( (((
inoremap (( ()<Left>
inoremap , ,
inoremap -- ->
inoremap :: ::
inoremap : :
inoremap <+ <?= ?><Left><Left><Left>
inoremap <<  />
inoremap <! <!----><Left><Left><Left>
inoremap < <
inoremap <? <?php  ?><Left><Left><Left>
inoremap >>>  >mtT<yt `ta</pa><Left>F xaO
inoremap >>  >mtT<yt `ta</pa><Left>F xa
inoremap ?? /**/<Left><Left>
nnoremap Ç :
inoremap [ []<Left>O
inoremap [[ []<Left>
inoremap \\ /
inoremap __ =>
cnoremap jk 
inoremap jk 
inoremap {{{ {{{
inoremap {{ {}O
abbr sptbr set spelllang=pt_br
let &cpo=s:cpo_save
unlet s:cpo_save
set autoindent
set autoread
set background=dark
set backspace=indent,eol,start
set backupdir=~/.vim-tmp//
set balloonexpr=SyntasticBalloonsExprNotifier()
set clipboard=unnamed
set complete=.,w,b
set completeopt=menu,preview,longest
set directory=~/.vim-tmp//
set fileencodings=ucs-bom,utf-8,default,latin1
set foldlevelstart=1
set guifont=Roboto\ Mono\ for\ Powerline\ Regular\ 11
set guioptions=aegit
set helplang=en
set hidden
set history=1000
set hlsearch
set incsearch
set laststatus=2
set listchars=tab:┆\ ,eol:¬,trail:���,extends:❯,precedes:❮
set matchtime=2
set nomodeline
set mouse=nv
set printoptions=paper:a4
set ruler
set runtimepath=~/.vim,~/.vim/bundle/Vundle.vim,~/.vim/bundle/gruvbox,~/.vim/bundle/vim-fugitive,~/.vim/bundle/nerdtree,~/.vim/bundle/vim-airline,~/.vim/bundle/syntastic,~/.vim/bundle/ctrlp.vim,~/.vim/bundle/nerdcommenter,~/.vim/bundle/tagbar,~/.vim/bundle/bclose.vim,~/.vim/bundle/ultisnips,~/.vim/bundle/vim-surround,~/.vim/bundle/vim-table-mode,~/.vim/bundle/Mark,~/.vim/bundle/vim-wakatime,~/.vim/bundle/emmet-vim,~/.vim/bundle/kotlin-vim,/var/lib/vim/addons,/usr/share/vim/vimfiles,/usr/share/vim/vim74,/usr/share/vim/vimfiles/after,/var/lib/vim/addons/after,~/.vim/after,~/.vim/bundle/Vundle.vim,~/.vim/bundle/Vundle.vim/after,~/.vim/bundle/gruvbox/after,~/.vim/bundle/vim-fugitive/after,~/.vim/bundle/nerdtree/after,~/.vim/bundle/vim-airline/after,~/.vim/bundle/syntastic/after,~/.vim/bundle/ctrlp.vim/after,~/.vim/bundle/nerdcommenter/after,~/.vim/bundle/tagbar/after,~/.vim/bundle/bclose.vim/after,~/.vim/bundle/ultisnips/after,~/.vim/bundle/vim-surround/after,~/.vim/bundle/vim-table-mode/after,~/.vim/bundle/Mark/after,~/.vim/bundle/vim-wakatime/after,~/.vim/bundle/emmet-vim/after,~/.vim/bundle/kotlin-vim/after
set scrolloff=2
set shiftround
set shiftwidth=4
set showcmd
set showmatch
set showtabline=2
set sidescrolloff=2
set smartcase
set smartindent
set smarttab
set softtabstop=4
set spelllang=pt_br
set suffixes=.bak,~,.swp,.o,.info,.aux,.log,.dvi,.bbl,.blg,.brf,.cb,.ind,.idx,.ilg,.inx,.out,.toc
set tabline=%!airline#extensions#tabline#get()
set tabstop=4
set timeoutlen=200
set title
set visualbell
set wildmenu
set window=40
let s:so_save = &so | let s:siso_save = &siso | set so=0 siso=0
let v:this_session=expand("<sfile>:p")
silent only
cd /var/www/grupos2.com.br/html/wp-content/themes/grupos2theme
if expand('%') == '' && !&modified && line('$') <= 1 && getline(1) == ''
  let s:wipebuf = bufnr('%')
endif
set shortmess=aoO
badd +42 header.php
badd +1 sass/framework/normalize.scss
badd +9 documentation/getting_started.md
badd +25 footer.php
badd +1 scritps/framework.js
badd +3 scritps/src/nav-dropdown.js
badd +11 sass/framework/variables.scss
badd +1 sass/framework/base.scss
badd +21 sass/modules/btn.scss
badd +15 sass/modules/flex-wrapper.scss
badd +80 sass/framework/header.scss
badd +50 customizer.php
badd +2 index.php
badd +7 front-page.php
badd +1 sass/framework/bootstrap-grid.scss
badd +2 sass/modules/panel.scss
badd +12 style.min.css
badd +3 sass/modules/center.scss
badd +7 sass/modules/imgs.scss
badd +28 sass/framework/clients.scss
badd +3 sass/modules/headings.scss
badd +2 sass/framework/extends.scss
badd +6 sass/framework/contato.scss
badd +7 Makefile
badd +13 sass/framework/nav_menu.scss
badd +2 sass/framework/cards.scss
badd +30 sass/global.scss
badd +1 sass/modules/dl.scss
badd +7 sass/framework/footer.scss
badd +4 scritps/src/nav-transparency.js
badd +4 scritps/src/owlinit.js
badd +1 at\ JS_Parse_Error.Object.defineProperty.get\ (eval\ at\ \<anonymous>\ (/usr/local/lib/node_modules/minifier/node_modules/uglify-js/tools/node.js
badd +16 front-page-clients.php
badd +32 front-page-cases.php
badd +7 sass/framework/cases.scss
badd +3 sass/framework/partnership.scss
badd +1 banner.php
badd +3 page.php
badd +8 sidebar.php
badd +1 sass/framework/sidebar.scss
badd +41 comments.php
badd +1 category.php
badd +1 404.php
badd +1 archive.php
badd +3 attachment.php
badd +1 tag.php
badd +1 single.php
badd +1 search.php
badd +1 nav-below.php
badd +1 nav-below-single.php
badd +1 entry.php
badd +8 author.php
badd +12 style.css
badd +6 sass/owl.carousel.min.css
badd +4 sass/framework/font-awesome.min.css
badd +88 functions.php
badd +3 page-cases.php
badd +1 page-clientes.php
badd +19 /var/www/grupos2.com.br/html/wp-content/themes/grupos2theme/page-services.php
badd +21 page-produtos.php
badd +14 documentation/customizer.md
badd +5 front-page-cards.php
badd +9 page-agencia.php
badd +9 sass/sections/footer.scss
badd +37 sass/sections/services.scss
badd +14 sass/sections/header.scss
badd +3 sass/modules/destyle_anchor.scss
badd +6 sass/sections/cards.scss
argglobal
silent! argdel *
edit page.php
set splitbelow splitright
set nosplitbelow
set nosplitright
wincmd t
set winheight=1 winwidth=1
argglobal
onoremap <buffer> <silent> [[ ?\(.*\%#\)\@!\_^\s*\zs\(\(abstract\s\+\|final\s\+\|private\s\+\|protected\s\+\|public\s\+\|static\s\+\)*function\|\(abstract\s\+\|final\s\+\)*class\|interface\)?:nohls
nnoremap <buffer> <silent> [[ ?\(.*\%#\)\@!\_^\s*\zs\(\(abstract\s\+\|final\s\+\|private\s\+\|protected\s\+\|public\s\+\|static\s\+\)*function\|\(abstract\s\+\|final\s\+\)*class\|interface\)?:nohls
onoremap <buffer> <silent> ]] /\(.*\%#\)\@!\_^\s*\zs\(\(abstract\s\+\|final\s\+\|private\s\+\|protected\s\+\|public\s\+\|static\s\+\)*function\|\(abstract\s\+\|final\s\+\)*class\|interface\)/:nohls
nnoremap <buffer> <silent> ]] /\(.*\%#\)\@!\_^\s*\zs\(\(abstract\s\+\|final\s\+\|private\s\+\|protected\s\+\|public\s\+\|static\s\+\)*function\|\(abstract\s\+\|final\s\+\)*class\|interface\)/:nohls
setlocal keymap=
setlocal noarabic
setlocal noautoindent
setlocal backupcopy=
setlocal balloonexpr=
setlocal nobinary
setlocal nobreakindent
setlocal breakindentopt=
setlocal bufhidden=
setlocal buflisted
setlocal buftype=
setlocal nocindent
setlocal cinkeys=0{,0},0),:,0#,!^F,o,O,e
setlocal cinoptions=j1,J1
setlocal cinwords=if,else,while,do,for,switch
setlocal colorcolumn=
setlocal comments=s:<!--,m:\ \ \ \ ,e:-->
setlocal commentstring=<!--%s-->
setlocal complete=.,w,b
setlocal concealcursor=
setlocal conceallevel=0
setlocal completefunc=
setlocal nocopyindent
setlocal cryptmethod=
setlocal nocursorbind
setlocal nocursorcolumn
set cursorline
setlocal cursorline
setlocal define=
setlocal dictionary=
setlocal nodiff
setlocal equalprg=
setlocal errorformat=
setlocal noexpandtab
if &filetype != 'html'
setlocal filetype=html
endif
setlocal fixendofline
setlocal foldcolumn=0
setlocal foldenable
setlocal foldexpr=0
setlocal foldignore=#
setlocal foldlevel=1
setlocal foldmarker={{{,}}}
set foldmethod=marker
setlocal foldmethod=marker
setlocal foldminlines=1
set foldnestmax=10
setlocal foldnestmax=10
setlocal foldtext=foldtext()
setlocal formatexpr=
setlocal formatoptions=tcq
setlocal formatlistpat=^\\s*\\d\\+[\\]:.)}\\t\ ]\\s*
setlocal grepprg=
setlocal iminsert=2
setlocal imsearch=2
setlocal include=^\\s*#\\s*include
setlocal includeexpr=
setlocal indentexpr=HtmlIndent()
setlocal indentkeys=o,O,<Return>,<>>,{,},!^F
setlocal noinfercase
setlocal iskeyword=@,48-57,_,192-255
setlocal keywordprg=
set linebreak
setlocal linebreak
setlocal nolisp
setlocal lispwords=
set list
setlocal list
setlocal makeprg=
setlocal matchpairs=(:),{:},[:],<:>
setlocal nomodeline
setlocal modifiable
setlocal nrformats=bin,octal,hex
set number
setlocal number
setlocal numberwidth=4
setlocal omnifunc=htmlcomplete#CompleteTags
setlocal path=
setlocal nopreserveindent
setlocal nopreviewwindow
setlocal quoteescape=\\
setlocal noreadonly
set relativenumber
setlocal relativenumber
setlocal norightleft
setlocal rightleftcmd=search
setlocal noscrollbind
setlocal shiftwidth=4
setlocal noshortname
setlocal nosmartindent
setlocal softtabstop=4
set spell
setlocal nospell
setlocal spellcapcheck=[.?!]\\_[\\])'\"\	\ ]\\+
setlocal spellfile=
setlocal spelllang=en
setlocal statusline=%!airline#statusline(1)
setlocal suffixesadd=
setlocal swapfile
setlocal synmaxcol=3000
if &syntax != 'php'
setlocal syntax=php
endif
setlocal tabstop=4
setlocal tagcase=
setlocal tags=
setlocal textwidth=0
setlocal thesaurus=
setlocal noundofile
setlocal undolevels=-123456
setlocal nowinfixheight
setlocal nowinfixwidth
setlocal nowrap
setlocal wrapmargin=0
let s:l = 13 - ((12 * winheight(0) + 19) / 38)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
13
normal! 013|
tabnext 1
if exists('s:wipebuf')
  silent exe 'bwipe ' . s:wipebuf
endif
unlet! s:wipebuf
set winheight=1 winwidth=20 shortmess=filnxtToO
let s:sx = expand("<sfile>:p:r")."x.vim"
if file_readable(s:sx)
  exe "source " . fnameescape(s:sx)
endif
let &so = s:so_save | let &siso = s:siso_save
doautoall SessionLoadPost
unlet SessionLoad
" vim: set ft=vim :
