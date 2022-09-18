// ・・・・ヘッダー　ハンバーガーメニュー・・・・//
const responsive_menu_btn = document.querySelector('.header__menu');
responsive_menu_btn.addEventListener('click', menuToggle);

function menuToggle() {
	const header_menu_detail = document.querySelector('.header__gnav');
    header_menu_detail.classList.toggle('header-open');
	responsive_menu_btn.classList.toggle('header__menu-active');
}
// ・・・・/ヘッダー　ハンバーガーメニュー・・・・//


// ・・・・ヘッダー　ハンバーガーメニュー・・・・//
const search_form = document.querySelector('.search-iconbox');
search_form.addEventListener('click', search);

function search() {
	const search_form_open = document.querySelector('.search');
    search_form_open.classList.toggle('search-open');
	search_form.classList.toggle('open');
}
// ・・・・/ヘッダー　ハンバーガーメニュー・・・・//