<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Penggajian</center></div>
                 
                <div class="panel-body">
                <body bgcolor="red" >
                    <table class="table" border='2'>
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Tunjangan pegawai id</th></center>
                                <th><center>Jumlah jam lembur</th></center>
                                <th><center>Jumlah uang lembur</th></center>
                                <th><center>Gaji pokok</th></center>
                                <th><center>Tanggal pengembalian</th></center>
                                <th><center>Status pengembalian</th></center>
                                <th><center>Petugas penerima</th></center>
                                <th colspan="2"><center>Opsi</th></center>
                            </tr>
                        </thead>
                        <?php 
                        $a=1;
                         ?>
                        <?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tbody>
                            <td><center><?php echo e($a++); ?></td></center>
                            <td unique><center><?php echo e($data->pegawai->id); ?></td></center>
                            <td unique><center><?php echo e($data->jumlah_jam_lembur); ?></td></center>
                            <td unique><center><?php echo e($data->jumlah_uang_lembur); ?></td></center>
                            <td unique><center><?php echo e($data->gaji_pokok); ?></td></center>
                             <td unique><center><?php echo e($data->total_gaji); ?></td></center>
                            <td unique><center><?php echo e($data->tanggal_pengembalian); ?></td></center>
                            <td unique><center><?php echo e($data->status_pengebalian); ?></td></center>
                            <td unique><center><?php echo e($data->petugas_penerima); ?></td></center>
                            
                            <td ><center>
                                    <a href="<?php echo e(route('penggajian.edit', $data->id)); ?>" class="btn btn-primary">Ubah</a>
                            </center></td>
                           <td >
                                  <center><a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  <?php echo $__env->make('modals.delete', [
                                    'url' => route('penggajian.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </td>
                            
                             

                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </table>
                    </body>
                                        
                            
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>