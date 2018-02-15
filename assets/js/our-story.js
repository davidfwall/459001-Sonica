// external js: flickity.pkgd.js

var $carousel = $('.carousel').flickity({cellAlign: 'left', prevNextButtons: false,adaptiveHeight: true}).focus();
var $background = $('.our-story__layer--bg');

var cellRatio = 1; // outerWidth of cell / width of carousel
var bgRatio = .8; // width of background layer / width of carousel

var flkty = $carousel.data('flickity');
var count = flkty.slides.length - 1;

$carousel.on( 'scroll.flickity', function( event, progress ) {
  moveParallaxLayer( $background, bgRatio, progress );
});
// trigger initial scroll
$carousel.flickity('reposition');

function moveParallaxLayer( $layer, layerRatio, progress ) {
  var ratio = cellRatio * layerRatio;
  $layer.css({
    left: ( 0.5 - ( 0.5 + progress * count ) * ratio ) * 100 + '%'
  });
}
