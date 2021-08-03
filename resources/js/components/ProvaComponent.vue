<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
               <nav>
                   <ul>
                        <li v-for="item in categeories" :key="item.id">
                      
                              {{ item.title }}
                          
                       </li>
                </ul>
                   
               </nav>
              
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
ul{
    list-style: none;
    li{
        display: inline;
        padding: 10px 15px;
    }
}
</style>

<script>
    const { default: axios } = require("axios");
    export default {
        data() {
            return {
                categeories: null
            }
        },
        mounted() {
            axios
            .get(" api/categries")
            .then(resp => {
               // console.log(resp.data);
                this.categeories = resp.data;
            })
            .catch(e => {
                console.log("Errore" + e);
            })
        }
    }
</script>