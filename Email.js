    const form = document.getElementById('contactForm');
    const feedback = document.getElementById('contactFeedback');

    function showFeedback(message, type = 'info') {
      feedback.textContent = message;
      feedback.style.color = type === 'error' ? '#ff6b6b' : type === 'success' ? '#7cffb2' : '#ffffff';
    }

    function validateForm(data) {
      const errors = [];
      const name = data.get('name').trim();
      const email = data.get('email').trim();
      const message = data.get('message').trim();

      if (!name) errors.push('El nombre es obligatorio.');
      if (!email) {
        errors.push('El email es obligatorio.');
      } else {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!re.test(email)) errors.push('Ingresa un email válido.');
      }
      if (!message) errors.push('El mensaje no puede estar vacío.');

      return errors;
    }

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      feedback.textContent = '';

      const formData = new FormData(form);
      const errors = validateForm(formData);
      if (errors.length) {
        showFeedback(errors.join(' '), 'error');
        return;
      }

      const submitBtn = form.querySelector('button[type="submit"]');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Enviando...';

      try {
        const resp = await fetch(form.action, {
          method: 'POST',
          body: formData,
        });

        const data = await resp.json();
        if (resp.ok && data.success) {
          showFeedback('¡Mensaje enviado correctamente!', 'success');
          form.reset();
        } else {
          showFeedback(data.error || 'No se pudo enviar el mensaje.', 'error');
        }
      } catch (err) {
        console.error('Fetch error:', err);
        showFeedback('Error de conexión: ' + err.message, 'error');
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Enviar';
      }
    });

    // Scroll spy (change active link based on section in view)
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          const id = entry.target.getAttribute('id');
          const link = document.querySelector(`.navbar-nav .nav-link[href="#${id}"]`);
          if (!link) return;

          if (entry.isIntersecting) {
            navLinks.forEach((l) => l.classList.remove('active'));
            link.classList.add('active');
          }
        });
      },
      { rootMargin: '-40% 0px -55% 0px', threshold: 0 }
    );

    sections.forEach((section) => observer.observe(section));