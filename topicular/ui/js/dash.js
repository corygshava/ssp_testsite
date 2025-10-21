// reusables
    function getanchor(url) {
        let parts = url.split("#");

        console.log(parts);

        if(parts.legnth != 1){return parts[1]}
        else{return null;}
    }

    function setuplogin(){
        let anchor = getanchor(location.href);

        anchor = window['anchorOverride'] != undefined ? window['anchorOverride'] : anchor;

        if(anchor == undefined){
            console.log('im fucked')
            return;
        }

        if(anchor.toLowerCase() == "register"){
            toggle_regforms();
        }
    }

    function toggle_regforms() {
        toggleShow(`[data-role='signup']`);
        toggleShow(`[data-role='login']`);
    }