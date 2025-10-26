import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// ==========================================================
// (A) โค้ดสำหรับควบคุม Video Modal (ที่เพิ่มเข้ามาใหม่)
// ==========================================================

// 1. รอให้หน้าเว็บ (DOM) โหลดเสร็จก่อน
document.addEventListener("DOMContentLoaded", function() {

    // 2. ดึง "องค์ประกอบ" ที่เราต้องใช้จาก HTML มาเก็บไว้
    const modal = document.getElementById("videoModal");
    const videoPlayer = document.getElementById("modalVideoPlayer");
    const videoSource = document.getElementById("modalVideoSource"); // ID ของ <source>
    const closeModalBtn = document.getElementById("closeModalBtn");
    const videoCards = document.querySelectorAll(".video-card"); // ดึงการ์ดทุกใบ

    // 3. ฟังก์ชันสำหรับ "เปิด" Modal
    function openModal(videoSrc) {
        // เช็คว่าหาของเจอครบ
        if (modal && videoPlayer && videoSource) {
            
            // 3.1) เอา path วิดีโอ (videoSrc) ไปใส่ใน <source>
            videoSource.setAttribute("src", videoSrc);
            
            // 3.2) สั่งให้ <video> โหลดไฟล์ใหม่
            videoPlayer.load();
            
            // 3.3) แสดง Modal (ลบ 'hidden', เพิ่ม 'flex')
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            
            // 3.4) เล่นวิดีโอ
            videoPlayer.play();
        }
    }

    // 4. ฟังก์ชันสำหรับ "ปิด" Modal
    function closeModal() {
        if (modal && videoPlayer) {
            
            // 4.1) ซ่อน Modal (เพิ่ม 'hidden', ลบ 'flex')
            modal.classList.add("hidden");
            modal.classList.remove("flex");
            
            // 4.2) หยุดเล่นวิดีโอ
            videoPlayer.pause();

            // 4.3) (สำคัญ) ล้างค่า src ออก ไม่งั้นวิดีโออาจจะเล่นค้างอยู่ข้างหลัง
            if (videoSource) {
                videoSource.setAttribute("src", "");
            }
        }
    }

    // 5. สั่งให้ "การ์ด" (ทุกใบ) รอการคลิก
    videoCards.forEach(card => {
        card.addEventListener("click", function() {
            // ดึง path จาก attribute 'data-video-src' ที่เราซ่อนไว้ใน HTML
            const src = card.getAttribute("data-video-src");
            if (src) {
                openModal(src); // เรียกใช้ฟังก์ชันเปิด
            }
        });
    });

    // 6. สั่งให้ "ปุ่มปิด" (กากบาท) รอการคลิก
    if (closeModalBtn) {
        closeModalBtn.addEventListener("click", closeModal);
    }

    // 7. สั่งให้ "พื้นหลังสีดำ" (Modal) รอการคลิก (สำหรับปิด)
    if (modal) {
        modal.addEventListener("click", function(event) {
            
            // เช็คว่าที่คลิกคือพื้นหลัง (event.target === modal)
            // ไม่ใช่ตัววิดีโอ (videoPlayer)
            if (event.target === modal) { 
                closeModal();
            }
        });
    }

});