
function switchLanguage() {
  const html = document.documentElement;
  const currentLang = html.getAttribute('lang');

  // Alternar idioma
  if (currentLang === 'pt') {
    html.setAttribute('lang', 'en');
    updateLanguageTexts('en');
    updateLangSwitcher('pt'); 
  } else {
    html.setAttribute('lang', 'pt');
    updateLanguageTexts('pt');
    updateLangSwitcher('en'); 
  }
}

function updateLangSwitcher(showLang) {
  const switcher = document.querySelector('.nav-links a.nav-item');
  if (showLang === 'pt') {
    switcher.textContent = 'Português';
  } else {
    switcher.textContent = 'English';
  }
}

function updateLanguageTexts(lang) {
  document.querySelectorAll('[data-pt]').forEach(el => {
    el.textContent = lang === 'pt' ? el.getAttribute('data-pt') : el.getAttribute('data-en');
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const currentLang = document.documentElement.getAttribute('lang') || 'pt';
  updateLanguageTexts(currentLang);
  updateLangSwitcher(currentLang === 'pt' ? 'en' : 'pt');
});

