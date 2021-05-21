<template>
    <div>
       
    </div>  
</template>
<script>
    export default {
        data: function () {
            return {
                count: 0,
                storageData: null,
                data: null,
            }
        },
        mounted(){
            // Внешнее прослушивание события обновления списка объектов
            this.$eventBus.$on('add-in-storage', (id) => {
                this.addItem(id);
            });

            this.app_compare_api.init();
            this.storageData = this.app_compare_api.getCompareIdList();
            if(this.storageData.length > 0){
                this.getList();
            }
        },
        methods: {
            addItem(id){
                this.app_compare_api.addIdInList(id);
                this.storageData = this.app_compare_api.getCompareIdList();
                this.getList();
                this.$eventBus.$emit('update-storage');
            },

            clearList(id){
                this.app_compare_api.clearList();
                this.storageData = this.app_compare_api.getCompareIdList();
                this.data = null;
                this.$eventBus.$emit('update-storage');
            },

            getList(){
                this.app_aplication_api.getRealEstateDataByList(this.storageData).then((response) => {
                    this.data = response.data;
                });
            },
            
        },
        
    }
</script>

<style>
.compare{
    position: fixed;
    right: 0;
    left: 0;
    /* top: 0; */
    bottom: 0;
    z-index: 999;
    background-color: transparent;
    border: 0;
    transition: all .5s ease;
    box-shadow: 0 -2px 6px 2px rgb(0 0 0 / 6%);
}
</style>