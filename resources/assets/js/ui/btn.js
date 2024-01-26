(function() {
  const animateButtons = [...document.getElementsByClassName('js--hover-btn')]

  if(!animateButtons.length) return;

  animateButtons.forEach(btn => {
    const symbols = btn.innerText.split('');
    let interval;

    btn.innerHTML = '';

    symbols.forEach(symbol => {
      const span = document.createElement('span');
      span.innerText = symbol;

      btn.appendChild(span)
    });


    const elements = btn.children;

    btn.addEventListener('mouseenter', e => {
      btn.classList.add('_hover');
      clearTimeout(interval);
      [...elements].forEach((el, index) => {
       interval = setTimeout(() => {
          resetClass();

          if(btn.classList.contains('_hover')) el.classList.add('_active');
        }, 100 + (index * 100))
      })
    });

    btn.addEventListener('mouseleave', e => {
      btn.classList.remove('_hover');
      clearTimeout(interval);
      resetClass();
    })
    function resetClass() {
      [...elements].forEach(item => item.classList.remove('_active'));
    }
  })
})()