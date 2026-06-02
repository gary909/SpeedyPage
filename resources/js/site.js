document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.offer-card');

  cards.forEach((card, index) => {
    card.animate(
      [
        { opacity: 0, transform: 'translateY(14px)' },
        { opacity: 1, transform: 'translateY(0)' }
      ],
      {
        duration: 280,
        delay: index * 65,
        easing: 'ease-out',
        fill: 'both'
      }
    );
  });
});
