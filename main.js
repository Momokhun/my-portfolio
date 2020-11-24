  $('.nav-link').on('click', (e) => {
    const destination = $(e.target).attr('href');
    e.preventDefault();
  
    $('html, body').animate(
      {
        scrollTop: $(destination).offset().top,
      },
      1000,
    );
  
    $('.navbar-toggler:visible').trigger('click');
  });


  function item1() {
    window.open('http://tasklist624.herokuapp.com/.', '_blank');
  } 

  function item2() {
    window.open('http://australia-34.herokuapp.com/.', '_blank');
  } 

  function item3() {
    window.open('http://flower-lp-624.herokuapp.com/.', '_blank');
  } 

  



