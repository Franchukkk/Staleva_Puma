<?php
/*
Template Name: Сторінка "Розклад"
*/

get_header(); // Підключаємо хедер
?>

<main class="main-content">
    <section id="schedule" class="schedule-section">
        <div class="schedule-container">
            
            <div class="section-title-wrapper-left">
                <div class="title-text-content">
                    <span class="pre-title">НАШ</span>
                    <h1 class="section-title">РОЗКЛАД</h1>
                </div>
                <hr class="title-line-full">
            </div>
            
            <div class="schedule-table-wrapper">
    <table class="schedule-table">
        <thead>
            <tr>
                <th></th>
                <th>ПН</th>
                <th>ВТ</th>
                <th>СР</th>
                <th>ЧТ</th>
                <th>ПТ</th>
                <th>СБ</th>
                <th>НД</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>спортзал</td>
                <td data-label="ПН">08:00 - 22:00</td>
                <td data-label="ВТ">08:00 - 22:00</td>
                <td data-label="СР">08:00 - 22:00</td>
                <td data-label="ЧТ">08:00 - 22:00</td>
                <td data-label="ПТ">08:00 - 22:00</td>
                <td data-label="СБ">11:00 - 20:30</td>
                <td data-label="НД">11:00 - 20:30</td>
            </tr>
            <tr>
                <td>аеробіка</td>
                <td data-label="ПН">17:00 - 18:00</td>
                <td data-label="ВТ">17:00 - 18:00</td>
                <td data-label="СР">17:00 - 18:00</td>
                <td data-label="ЧТ">17:00 - 18:00</td>
                <td data-label="ПТ">17:00 - 18:00</td>
                <td data-label="СБ">17:00 - 18:00</td>
                <td data-label="НД">17:00 - 18:00</td>
            </tr>
        </tbody>
    </table>
</div>
            
        </div>
    </section>
</main>

<?php
get_footer(); // Підключаємо футер
?>