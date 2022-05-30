<template>
<div>
 
    <div>{{employees}}fdfdf</div>
</div>  
</template>

<script>
export default {
  data() {
    return {
      employees: []
  }
  },
  methods: {
   getData(){
     debugger
     console.log("name");
   },
    getEmployeeData() {
      debugger
      fetch("db.json")
        .then(response => response.json())
        .then(data => (this.employees = data));
  },
  
} ,
created() {
  this.getEmployeeData()
  },
}
</script>
