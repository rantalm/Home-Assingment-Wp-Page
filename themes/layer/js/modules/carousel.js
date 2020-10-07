import $ from 'jquery'
import slick from 'slick-carousel'

const carousel = () => {
  $('.carousel').slick({
    infinite: true,
  })
}

export default carousel
