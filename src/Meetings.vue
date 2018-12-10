<template>
  <div>
    <div>
      <div v-if="people.length > 0">
        <h1>Participants list</h1>
        <ol>
          <li v-for="person in people">
            {{ person.firstname }}
            {{ person.lastname }}
          </li>
        </ol>
      </div>
    </div>

    <h3>New participant</h3>
    <form @submit.prevent="addNewParticipant()">
      <label>Firstname</label>
      <input type="text" v-model="newPerson.firstname">
      <label>Lastname</label>
      <input type="text" v-model="lastname">
      <button>Add new participant</button>
    </form>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        newPerson: {firstname: '', lastname: ''},
        people: []
      };
    },
    methods: {
      addNewParticipant() {
        if (!this.newPerson.lastname) {
          return;
        }
        this.people.push(this.newPerson);
        this.newPerson = {};
      }
    }
  };
</script>
