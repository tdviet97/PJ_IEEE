jQuery(function($) {
    $('#compare').mergely({
        cmsettings: {
            readOnly: false
        },
        lhs: function(setValue) {
            setValue('input1');
        },
        rhs: function(setValue) {
            setValue('input2');
        }
    });
});