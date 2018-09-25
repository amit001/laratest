<?php
// tests/Unit/AccessorTest.php
namespace Tests\Unit;
 
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use App\Post;
 
class AccessorTest extends TestCase
{
    /**
     * Test accessor method
     *
     * @return void
     */
    public function testAccessorTest()
    {
        // load post manually first
        $db_post = DB::select('select * from posts where id = 1');
        $db_post_title = ucfirst($db_post[0]->name);
         
        // load post using Eloquent
        $model_post = Post::find(1);
        $model_post_title = $model_post->name;
         
        $this->assertEquals($db_post_title, $model_post_title);
    }
}