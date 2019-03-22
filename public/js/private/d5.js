// new Vue({
//     el: '#app',
//     data: {
//         message: "hello chief again!"
//     },
//     created: {
        
//     },
//     methods: {
//         changeMessage: function () {
//             this.message = "hello Vue!"
//         }
//     }
// });

new Vue({
    el: '#app',
    data: {
        todos: [
            {
                title:'buy milk',
                completed: false,
            },
            {
                title:'buy cheese',
                completed: false,
            },
            {
                title:'buy money',
                completed: true,
            },
            {
                title:'learn vue',
                completed: false,
            },
        ]
    },

    methods: {
        delete: function () {
            this.todos.indeOf(item);
            console.log("hello")
        }
    }
});