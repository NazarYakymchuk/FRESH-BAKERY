const md = import.meta.env.VITE_WINDOW_SIZE_MD;

const isDesktop = window.innerWidth >= +md;
export default isDesktop;