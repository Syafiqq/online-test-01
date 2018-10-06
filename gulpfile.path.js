module.exports = {
    assetsVendorResource: function (negated, mime) {
        return [
            (negated ? '!' : '') + './node_modules/admin-lte/dist/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/html5shiv/dist/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/respond.js/dest/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/datatables.net/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/datatables.net-dt/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/datatables.net-bs/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/jQuery.print/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/icheck/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/bootstrap-timepicker/css/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/bootstrap-timepicker/js/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/bootstrap-datepicker/dist/**' + (mime === null ? '' : '/' + mime),
            (negated ? '!' : '') + './node_modules/select2/dist/**' + (mime === null ? '' : '/' + mime),
        ];
    }
};
