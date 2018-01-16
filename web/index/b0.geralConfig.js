// Path

var currentPath = 'index';
var currentFile = 'index';

// Load JS

$.when(
    $.getScript( "web/" + currentPath + "/assets/js/b0." + currentFile + ".js" ),
    $.Deferred(function( deferred ){
        $( deferred.resolve );
    })
).done(function(){

});
