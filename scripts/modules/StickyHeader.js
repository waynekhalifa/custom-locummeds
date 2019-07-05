import waypoints from '../../node_modules/waypoints/lib/noframework.waypoints'

class StickyHeader {
    constructor() {
        this.siteHeader = $('.site-header');
        this.headerTrigger = $('.site-header');
        this.menuIcon = $('.menu__icon');
        this.wrapHeader();
        this.createHeaderWaypoint();
    }

    wrapHeader() {
        this.siteHeader.wrap('<div class="header-placeholder"></div>');
        $('.header-placeholder').height( this.siteHeader.outerHeight() );
    }

    createHeaderWaypoint = () => {
        new Waypoint({
            element: this.headerTrigger[0],
            handler: direction => {
                if ( direction == 'down' ) {
                    this.siteHeader.addClass('site-header--stuck');
                    this.menuIcon.addClass('menu__icon--stuck');
                    // this.headerTrigger.addClass('hero--stuck');
                } else {
                    this.siteHeader.removeClass('site-header--stuck');
                    this.menuIcon.removeClass('menu__icon--stuck');
                    // this.headerTrigger.removeClass('hero--stuck');
                }
            }
        });
    }
}

export default StickyHeader;