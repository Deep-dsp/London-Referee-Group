import {fetchData } from"./components/DataMiner.js";
import ChatMessage from "./components/TheMessageComponent.js";


(() => {
    console.log('fired');


    const vm = new Vue({
        data: {
            removeAformat: true,
                showBioData: false,
                carmodel: [],
                currentPeopleData: {}
        }, 

        created: function(){
            console.log("vue is mounted, trying a fetch for the initial data");
<<<<<<< HEAD
            fetchData("./includes/index.php")
=======
            fetchData("./includes/index1.php")
>>>>>>> 54dda27dff19e92c0592c8421b216112b8058551
            .then(data => { 
                    
                data.forEach(people =>this.carmodel.push(people));
                this.currentPeopleData = data;
                
            })
                .catch(err => console.error(err));
        },

        methods: {
            logClicked(){
                console.log("clicked on a person name");
            },
            showPeopleData(target) {
                console.log('clicked to view people bio data', target, target.name);
                this.showBioData = this.showBioData ? false : true;

                this.currentPeopleData = target;
            },
            removeProf(target) {
                // remove this prof from the professors array
                console.log('clicked to remove prof', target, target.name);
                // the "this" keyword inside a vue instance REFERS to the Vue instance itself by default

                // make the selected prof's data visible
                // this.professors.splice(this.professors.indexOf(target), 1);
                this.$delete(this.carmodel, target);
            }
            

        },
        components: {
            newmessage: ChatMessage
        }
    }).$mount("#app");

    
})();