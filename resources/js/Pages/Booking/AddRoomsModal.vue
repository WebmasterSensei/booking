<template>
    <n-modal :mask-closable="false" preset="dialog" title="Add Available room!" content="Are you sure?" footer="null">
        <!-- Input Field -->
        <form>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <span class="font-semibold">Price: </span>
                    <n-input v-model:value="formSubmit.price" size="large" round placeholder="Enter text"
                        class="w-full mb-4" />

                </div>
                <div>
                    <span class="font-semibold">Room Description</span>
                    <n-input v-model:value="formSubmit.desc" size="large" class="rounded-xl" type="textarea"
                        placeholder="Enter your text here..." />
                </div>
            </div>
            <span class="font-semibold ">Add Image: </span>
            <div class="text-center bg-green-50">

                <n-upload v-model:value="formSubmit.fileList" v-model:file-list="previewFileList"
                    @on-before-upload="() => false" list-type="image-card" @change="handleUploadChange"
                    @preview="true" />

            </div>
            <n-modal v-model:show="showModalRef" preset="card" style="width: 600px" title="A Cool Picture">
                <img :src="previewImageUrlRef" style="width: 100%">
            </n-modal>
            <div class="flex justify-end mt-5">
                <n-button type="info" @click="submitForm">
                    Add Room
                </n-button>
            </div>
        </form>
    </n-modal>
</template>
<script setup lang="ts">
import type { UploadFileInfo } from 'naive-ui'
import { ref } from 'vue';
import { useForm } from 'laravel-precognition-vue';
import Swal from 'sweetalert2';


const previewFileList = ref<UploadFileInfo[]>();
const showModalRef = ref<boolean>(false);
const previewImageUrlRef = ref('')

const emit = defineEmits<{
    (e: "closeModal"): void
}>();

interface FormSubmitResponse {
    data: {
        title: string;
        msg: string;
        status: string;
    }
}

const formSubmit = useForm('post', route('book.create'), {
    fileList: {},
    desc: '',
    price: 0,
});

const submitForm = () => {
    formSubmit.submit().then(res => {

        const data = res as FormSubmitResponse;

        formSubmit.reset();
        
        emit('closeModal');

        if (data.data.status === 'success') {
            Swal.fire({
                title: data.data.title,
                text: data.data.msg,
                icon: "success",
            });
        }
    });
}

const handleUploadChange = (file: UploadFileInfo[]) => {
    formSubmit.fileList = file;
}

</script>
