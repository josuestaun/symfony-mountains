<?php

namespace App\DataFixtures;

use DateTime;
use Faker;

use App\Entity\Zonas;
use App\Entity\Mountains;
use App\Entity\UsuarioSube;
use App\Entity\Usuarios;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        
        //PRIMERO CREO LAS ZONAS
        //zona1
        $zona1 = new Zonas();
        $zona1->setPais("España");
        $zona1->setProvincia("Aragon");
        $manager->persist($zona1);
        //zona2
        $zona2 = new Zonas();
        $zona2->setPais("Francia");
        $zona2->setProvincia("Chamonix");
        $manager->persist($zona2);
        
        //LUEGO CREO LAS MONTAÑAS CON ESAS ZONAS
        //montaña1
        $mountain1 = new Mountains();
        $mountain1->setNombre("Anto");
        $mountain1->setDescripcion("El Aneto es el pico más elevado de los Pirineos, con una altitud de 3404 metros sobre el nivel del mar. Se encuentra situado en el Parque natural Posets-Maladeta, en el municipio español de Benasque, provincia de Huesca, comunidad autónoma de Aragón.");
        $mountain1->setAltura(3404);
        $mountain1->setDesnivel(1579);
        $mountain1->setImagen("ruta de la imagen");
        $mountain1->setZona($zona1);
        $manager->persist($mountain1);
        
        //montaña2
        $mountain2 = new Mountains();
        $mountain2->setNombre("Mont-Blanc");
        $mountain2->setDescripcion("El Mont Blanc o Monte Bianco —orónimo en francés e italiano, respectivamente; traducido al español como ‘Monte Blanco’— es la montaña granítica culminante de los Alpes");
        $mountain2->setAltura(4810);
        $mountain2->setDesnivel(2013 );
        $mountain2->setImagen("ruta de la imagen");
        $mountain2->setZona($zona2);
        $manager->persist($mountain2);
        
        //LUEGO CREO LOS USUARIOS SUELTOS
        //usuario1
        $user1 = new Usuarios();
        $user1->setEmail("user1@user.com");
        $user1->setPassword("user1");
        $manager->persist($user1);
        
        //usuario2
        $user2 = new Usuarios();
        $user2->setEmail("user2@user.com");
        $user2->setPassword("user2");
        $manager->persist($user2);
        
        //LUEGO CREO LOS USUARIOSUBE CON SU USUARIO Y SU ZONA
        //usuario1Sube1
        $usuario1Sube1 = new UsuarioSube();
        $usuario1Sube1->setMountain($mountain1);
        $usuario1Sube1->setUsuario($user1);
        $manager->persist($usuario1Sube1);
        
        //usuario1Sube2
        $usuario1Sube2 = new UsuarioSube();
        $usuario1Sube2->setMountain($mountain2);
        $usuario1Sube2->setUsuario($user1);
        $manager->persist($usuario1Sube2);

        $manager->flush();
    }
}
