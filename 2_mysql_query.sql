Select mhs_nama, nilai
from tb_mahasiswa 
join tb_mahasiswa_nilai 
on tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id
join tb_matakuliah
on tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id
where mk_kode = 'MK303'
order by nilai desc 
limit 1;