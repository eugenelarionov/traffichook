<template>
    <div class="list-group p-2">
        <a href="#" class="list-group-item active" style="background-color: #0c9a96; border-color: #129a96;">ул. Кременчугская</a> 
        <a href="#" class="list-group-item">Перекресток #1 {{ getStatus(0) }}</a> 
        <a href="#" class="list-group-item">Перекресток #2 {{ getStatus(1) }}</a> 
        <a href="#" class="list-group-item">Перекресток #3 {{ getStatus(2) }}</a>
        <a href="#" class="list-group-item active" style="background-color: #0c9a96; border-color: #129a96;">ул. Красноармейская</a> 
        <a href="#" class="list-group-item">Перекресток #7  {{ getStatus(3) }}</a> 
        <a href="#" class="list-group-item">Перекресток #8  {{ getStatus(4) }}</a> 
        <a href="#" class="list-group-item">Перекресток #9  {{ getStatus(5) }}</a>
        <a href="#" class="list-group-item">Перекресток #10 {{ getStatus(6) }}</a>
        <a href="#" class="list-group-item active" style="background-color: #0c9a96; border-color: #129a96;">ул. Петра Великого</a> 
        <a href="#" class="list-group-item">Перекресток #0 {{ getStatus(7) }}</a> 
        <a href="#" class="list-group-item">Перекресток #2 {{ getStatus(8) }}</a>
    </div>
</template>
<script>
    import { yandexMap, ymapMarker } from 'vue-yandex-maps';

    export default {
      props: ['id', 'height'],
      components: { yandexMap, ymapMarker },
      mounted(){},
      data: function () {
            return {
                status: [
                    0,0,0,0,0,0,0,0,0
                ],

                time: [
                    15, 3, 7, 2, 10, 10, 3, 4, 7
                ],
            }
        },
        methods: {
            getStatus (id) {
               return this.status[id];
            },
        }
      
    }
</script>



    