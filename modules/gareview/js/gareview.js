/**
 * @file
 * Google review module init js.
 */
(function ($, Drupal, drupalSettings) {
    Drupal.behaviors.gareview = {
        attach: function (context, settings) {
            var site_id = drupalSettings.gaconfig.config.google_site_place_id;
            var min_rating = drupalSettings.gaconfig.config.min_rating;
            var max_rows = drupalSettings.gaconfig.config.max_rows;

            $('#google-reviews').googlePlaces({
                placeId: site_id //Find placeID @: https://developers.google.com/places/place-id
                , render: ['reviews']
                , min_rating: min_rating
                , max_rows: max_rows
            });
        }
    };
})(jQuery, Drupal, drupalSettings);
