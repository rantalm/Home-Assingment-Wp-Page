import $ from 'jquery'

const hero = () => {
  $('.hero__scroll').click(function () {
    console.log('clicked')
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $('#scroll-to').offset().top,
      },
      600
    )
  })
}

export default hero
