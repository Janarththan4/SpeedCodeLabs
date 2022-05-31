<template>
<table>
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Gender</td>
    <td>Age</td>
    <td>Email</td>
  </tr>
    <tr v-for="employee in employees" :key="employee.id">
      <td>{{employee.id}}</td>
      <td>{{employee.name}}</td>
      <td>{{employee.gender}}</td>
      <td>{{employee.age}}</td>
      <td>{{employee.email}}</td>
    </tr>
</table>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      employees: []
  }
  },
  methods: {
  getEmployeeData() {
      // debugger
      // fetch("db.json")
      //   .then(response => response.json())
      //   .then(data => (this.employees = data.employees));
     axios.get("db.json").then(response => (this.employees = response.data.employees));  
  }
},
created() {
  this.getEmployeeData()
}
}

</script>

<style>
table, td, th {  
  border: 1px solid #333;
  text-align: left;
}
table {
  border-collapse: collapse;
}
tr, td {
  padding: .5em;
}
</style>