//working with the request block
var card = new Vue({
  el: "#products",
  data: {
    cards: [{
      img: "public/img/image 2.png",
      title: "Dog 1",
      option: "1",
      status: "Завершенно"
    },
    {
      img: "public/img/image 2.png",
      title: "Dog 1",
      option: "1",
      status: "Завершенно"
    },
    {
      img: "public/img/image 2.png",
      title: "Dog 1",
      option: "1",
      status: "Завершенно"
    },
    {
      img: "public/img/image 2.png",
      title: "Dog 1",
      option: "1",
      status: "Завершенно"
    },
    {
      img: "public/img/image 2.png",
      title: "Dog 1",
      option: "1",
      status: "Завершенно"
    }],
  }
})

//working with the form block
var form = new Vue({
  el: '#v-message',
  data: {
    name: '',
    selected: '',
    options: [
      { text: "Стрижка", value: 'Стрижка' },
      { text: "Маникюр", value: 'Маникюр' },
      { text: "Экспресс-линька", value: 'Экспресс-линька' },
    ]

  },

  //methods
  methods: {
    add() {
      card.cards.push({
        img: "/public/img/image 2.png",
        title: this.name,
        option: this.selected,
        status: "Обрабатывается"
      })


    }
  }
})
  ;

//working with the register/authorization form
var formregs = new Vue({
  el: "#formreg",
  data: {
    login: "",
    password: ""
  },
  methods: {
    showReg() {
      console.log(this.login, this.password);
    }
  },
});

