export default{
    props: ['program'],

    data: function() {
        return {
            
            myTitle: this.program.title,
            myDes: this.program.description
        
           
        }
    },
    template: `<li class ="event-pic"> 
                <img :src="'images/' + program.img" :alt='program.title + " image"' >
                <h2>{{program.title}} </h2>
                <p>{{program.description}}</p>
        
        </li>`,

        created: function () {
            console.log(`created ${this.program.title}'s card`);
            
            
        }
        
        
}