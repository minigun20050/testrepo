const updateTheme = () => {
  if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark');
    document.body.classList.remove('light');
  } else {
    document.body.classList.add('light');
    document.body.classList.remove('dark');
  }
}

const setSystemTheme = (event) => {
  const isDark = event ? event.matches : window?.matchMedia('(prefers-color-scheme: dark)').matches;
  if (isDark === null || isDark === undefined)
    isDark = true;

  localStorage.setItem('theme', isDark ? 'dark' : 'light');
  updateTheme();
}

// ====== //

document.addEventListener('DOMContentLoaded', function() {
  updateTheme();
  const button = document.getElementById('themeToggle');
  if (!button) {
      console.error('Button `#themeToggle` not found.')
      return;
  }
  
  button.addEventListener('click', function() {
      localStorage.setItem(
          'theme',
          document.body.classList.contains('dark') ? 'light' : 'dark'
      )
      updateTheme();
  });
})

// ====== //

if (localStorage.getItem('theme') === null)
  setSystemTheme();

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setSystemTheme);
