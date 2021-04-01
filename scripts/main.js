// import "./components/slider.js";

import {fetchData } from"./components/DataMiner.js";
import EventMessage from "./components/TheEventComponent.js";


(() => {

    const vm = new Vue({
        data: {
            eventmodel: [],
            showBioEvent: false,
            currentEvent: {}
            
        },
        created: function(){
            
            fetchData("./includes/events.php")
            .then(data => { 
                    
                data.forEach(program =>this.eventmodel.push(program));
                this.currentEvent = data;
                
            })
                .catch(err => console.error(err));
        },
        methods: {
            
            showEventData(target) {
                
                this.showBioEvent = this.showBioEvent ? false : true;

                this.currentEvent = target;
            }
            
            

        },
    
    components: {
        newevent: EventMessage
    }
    }).$mount("#app1");

})();