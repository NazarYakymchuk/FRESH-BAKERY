(function() {
  const wrappers = [...document.getElementsByClassName('js--tabs')]

  if(!wrappers.length) return;

  wrappers.forEach(wrapper => {
    const buttons = [...wrapper.getElementsByClassName('js--tab-btn')];
    const content = [...wrapper.getElementsByClassName('js--tab-content')];

    if(!buttons.length || !content.length) return;

    buttons.forEach(btn => {
      btn.addEventListener('click', e => {
        const currentContent = content.find(el => el.dataset.anchor === btn.dataset.anchor);

        if(!currentContent) return;

        [buttons, content].flat().forEach(item => item.classList.remove('_active'));

        [btn, currentContent].forEach(item => item.classList.add('_active'));
      })
    })

  })
})()