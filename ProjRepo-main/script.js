document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('themeToggle');
  
    button.addEventListener('click', function() {
      if (document.body.classList.contains('dark')) {
        document.body.classList.remove('dark');
        document.body.classList.add('light');
      } else {
        document.body.classList.remove('light');
        document.body.classList.add('dark');
      }
    });
  });
  