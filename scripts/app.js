import MobileMenu from './modules/MobileMenu';
import OwlSliders from './modules/OwlSliders';
import StickyHeader from './modules/StickyHeader';
import RevealOnScroll from './modules/RevealOnScroll';
import Modal from './modules/Modal';
import Counter from './modules/Counter';

$(document).ready(function(){
    new MobileMenu();
    new OwlSliders();
    new StickyHeader();
    // new RevealOnScroll( $('.about'), '85%', 'left' );
    // new RevealOnScroll( $('.about-us .entry-content'), '50%', 'left' );
    // new RevealOnScroll( $('.testimonials'), '85%', 'right' );
    // new RevealOnScroll( $('.company-contact'), '65%', 'zoom-out' );
    new Modal( $('.request-modal'), $('.request-callback'), $('.backdrop') );
    new Modal( $('.refer-modal'), $('.refer-friend'), $('.backdrop') );
    new Modal( $('.send-cv-modal'), $('.send-cv'), $('.backdrop') );
    new Modal( $('.application_details'), $('.application_button'), $('.backdrop') );

    // Counter Up
    new Counter();
});