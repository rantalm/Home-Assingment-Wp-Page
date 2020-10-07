/** Styles */
import '../css/style.css'

/** Modules */
import carousel from './modules/carousel'
import hero from './modules/hero'
import menu from './modules/menu'

/**
 *
 *  Code
 */
carousel()
hero()
menu()

//Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}
