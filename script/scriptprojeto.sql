

/*mysql -u root -p*/
    CREATE DATABASE projeto_inc;
    USE projeto_inc;


    CREATE TABLE usuario( id_usuario INT AUTO_INCREMENT,
    usuario VARCHAR(45),	
    email VARCHAR(75),
    senha VARCHAR(8),
    PRIMARY KEY (id_usuario)	
    );

CREATE TABLE processo( num_proc INT AUTO_INCREMENT,
    requerente VARCHAR(75),	
    requerido VARCHAR(75),
    tipo_proc VARCHAR(20),
    status_proc VARCHAR(20),
    comentario VARCHAR(5000),
    PRIMARY KEY (num_proc)	
    );



CREATE TABLE bairro(
    cod_bairro INT AUTO_INCREMENT,
    nome_bairro VARCHAR(45),
    PRIMARY KEY(cod_bairro)
);

CREATE TABLE turma(
    num_turma INT AUTO_INCREMENT,
    professor_turma VARCHAR(45),
    curso_turma INT,
    PRIMARY KEY(num_turma),
    FOREIGN KEY(curso_turma) REFERENCES curso(cod_curso)    
);

CREATE TABLE professor(
    cod_professor INT AUTO_INCREMENT,
    nome_professor VARCHAR(45),
    PRIMARY KEY(cod_professor)
);

CREATE TABLE disciplina(
    cod_disciplina INT AUTO_INCREMENT,
    nome_disciplina VARCHAR(45),
    PRIMARY KEY(cod_disciplina)
);

CREATE TABLE curso(
    cod_curso INT AUTO_INCREMENT,
    nome_curso VARCHAR(45),
    PRIMARY KEY(cod_curso)
);

CREATE TABLE curso_tem_disciplina(
    curso INT,
    disciplina INT,
    FOREIGN KEY(curso) REFERENCES curso(cod_curso),
    FOREIGN KEY(disciplina) REFERENCES disciplina(cod_disciplina)    
);

CREATE TABLE aluno(
    matricula INT AUTO_INCREMENT,
    nome_aluno VARCHAR(90),
    bairro_aluno INT,
    turma_aluno INT,
    PRIMARY KEY(matricula),
    FOREIGN KEY(bairro_aluno) REFERENCES bairro(cod_bairro),
    FOREIGN KEY(turma_aluno) REFERENCES turma(num_turma)
);
CREATE TABLE usuario(
    id_usuario int AUTO_INCREMENT,
    usuario VARCHAR(45),
    email VARCHAR(75),
    senha VARCHAR(6),
    PRIMARY KEY (id_usuario)
);

INSERT INTO bairro(nome_bairro) VALUES ("Alagoinha"),("Asa Sul"),("Asa Norte"),("Lago Sul"),("Lago Norte");

INSERT INTO disciplina(nome_disciplina) VALUES ("HTML"),("CSS"),("Javascript"),("PHP"),("MySQL"),("Java SE"),("Java EE");

INSERT INTO curso(nome_curso) VALUES ("Web design"),("Frontend"),("Backend"),("Web developer"),("DBA"),("Programção");
/*mysql -u root -p*/
/*USE escola_a30n;*/
CREATE TABLE usuario(
id_usuario INT AUTO_INCREMENT,
usuario VARCHAR(45),	
email VARCHAR(75),	
senha VARCHAR(6),	
PRIMARY KEY (id_usuario)	
);

SELECT senha FROM usuario WHERE usuario = 'Cristina';


ALTER TABLE usuario ADD bairro INT;
ALTER TABLE usuario ADD FOREIGN KEY (bairro) REFERENCES bairro(cod_bairro);
SELECT * FROM usuario WHERE usuario = 'chteles' and senha = md5('kaka');
   CREATE DATABASE login55;
    USE login55;




    $result = $conn->query($sql);
		$consulta = $result->fetch(PDO::FETCH_ASSOC);

		foreach($conn->query( $sql ) as  $consulta ){

			$requerente = $consulta['requerente'];
			$requerido = $consulta['requerido'];
			$processo = $consulta['num_proc'];
			$tipo_proc = $consulta['tipo_proc'];
			$status_proc = $consulta['status_proc'];
			$data_entrega = $consulta['data_entrega'];
			$comentario = $consulta['comentario'];
		}

    $id = $_GET['id_proc'];
    $sql = "SELECT * FROM processo WHERE id_proc=$id";
	$result = $conn->query($sql);
    $consulta = $result->fetch(PDO::FETCH_ASSOC);

    if($result->num_rows > 0){
		foreach($conn->query( $sql ) as  $consulta ){

	$requerente = $consulta['requerente'];
    $requerido = $consulta['requerido'];
    $processo = $consulta['num_proc'];
    $tipo_proc = $consulta['tipo_proc'];
    $status_proc = $consulta['status_proc'];
    $data_entrega = $consulta['data_entrega'];
    $comentario = $consulta['comentario'];
		}
	} else{
		header('Location: ../formulario/con_proc.php');
	}