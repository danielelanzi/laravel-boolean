require('./bootstrap');

const $ = require('jquery');

$(document).ready(function(){

    $('#filter').change(function () {

        // console.log($(thiis).val());
        console.log(window.location.protocol + '//' + window.location.host + '/api/students/genders');

        $.ajax({
            'url': window.location.protocol + '//' + window.location.host + '/api/students/genders',
            'data' : {
                'gender': $(this).val()
            },
            'method': 'POST',
            success: function(data) {
                console.log(data.error);
                if (data.response.length > 0) {
                    console.log(data.response);
                } else {
                    console.log('No Students');
                }
            },
            error: function () {
                console.log('error');
                
            }
        });
    });

    $('#etafilter').change(function () {

        // console.log($(thiis).val());
        console.log(window.location.protocol + '//' + window.location.host + '/api/students/eta');

        $.ajax({
            'url': window.location.protocol + '//' + window.location.host + '/api/students/eta',
            'data' : {
                'eta': $(this).val()
            },
            'method': 'POST',
            success: function(data) {
                console.log(data.error);
                if (data.response.length > 0) {
                    console.log(data.response);
                } else {
                    console.log('No Age');
                }
            },
            error: function () {
                console.log('error');
                
            }
        });
    });
});