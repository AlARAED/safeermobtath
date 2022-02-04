<template>
    <li class="list-group-item" :class="className">
        <div class="">
            <div class="row">
                <div class="col-12 col-md-6 d-flex">
                    <div class="prof_img">
                    </div>
                    <h5 class="m_auto_20 color_red">Adam Ali</h5>
                </div>
            </div>
            <p class="text-left font_17 p_0_120"><slot></slot></p>
            <small class="float-left badge-danger">{{ user }}</small>
        </div>
        <!----></li>
</template>

<script>
export default {
    props:[
        'color',
        'user'
    ],
    computed:{
        className(){
return 'list-group-item-'+this.color;
        }
    },
    mounted() {
        console.log('compp')
    }

}
</script>
