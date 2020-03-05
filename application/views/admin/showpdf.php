<section>
<div id="<?php echo $id_kontrak?>-pdf" class=" pdfobject-container">
    <embed class="pdfobject" src="https://swingtradingindo.com/wp-content/uploads/2020/01/ebook-jesse-livermore.pdf" type="application/pdf" style="overflow: auto; width: 100%; height: 1900px;">
    </embed>
</div>
</section>
<!-- insert just before the closing body tag </body> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.js'></script>
<script>
var options = {
    pdfOpenParams: { scrollbar: '1', toolbar: '1', statusbar: '1', navpanes: '1' }
};

PDFObject.embed("https://swingtradingindo.com/wp-content/uploads/2020/01/ebook-jesse-livermore.pdf", "<?php echo $id_kontrak?>-pdf");
</script>