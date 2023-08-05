flatpickr("#timepicker", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true,
    plugins: [new confirmDatePlugin({})],
});