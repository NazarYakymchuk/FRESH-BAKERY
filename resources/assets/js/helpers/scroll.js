function blockScroll() {
  const scrollWidth = getScrollWidth();
  if (scrollWidth) {
    document.documentElement.style.paddingRight = scrollWidth + 'px';
  }
  document.body.classList.add('_scroll-lock');
}
function unBlockScroll() {
  document.documentElement.style.paddingRight = null;
  document.body.classList.remove('_scroll-lock');
}
function getScrollWidth() {
  return (window.innerWidth - document.documentElement.clientWidth) || parseFloat(getComputedStyle(document.documentElement).paddingRight) || 0;
}

export { blockScroll, unBlockScroll };