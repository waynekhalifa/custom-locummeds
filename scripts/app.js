import MobileMenu from './modules/MobileMenu';
import OwlSliders from './modules/OwlSliders';
import StickyHeader from './modules/StickyHeader';
import RevealOnScroll from './modules/RevealOnScroll';
import Modal from './modules/Modal';
import GoogleMap from './modules/GoogleMap';

$(document).ready(function(){
    new MobileMenu();
    new OwlSliders();
    new StickyHeader();
    new RevealOnScroll( $('.about'), '85%', 'left' );
    new RevealOnScroll( $('.testimonials'), '85%', 'right' );
    new RevealOnScroll( $('.company-contact'), '85%', 'left' );
    new Modal( $('.request-modal'), $('.request-callback'), $('.backdrop') );
    new Modal( $('.refer-modal'), $('.refer-friend'), $('.backdrop') );
    new Modal( $('.send-cv-modal'), $('.send-cv'), $('.backdrop') );
});

// Google Map
// const map = new GoogleMap( document.getElementById('map-canvas'));