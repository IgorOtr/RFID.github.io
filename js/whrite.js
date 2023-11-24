document.addEventListener('DOMContentLoaded', () => {
    new TypeIt("#words", {
        speed: 100,
        loop: true,
      })
      .type('INOVAÇÃO', { delay:900 })
      .delete(10)
      .type('AUTOMAÇÃO', { delay:500 })
      .delete(10)
      .type('INDÚSTRIA 4.0', { delay:900 })
      .go();
});