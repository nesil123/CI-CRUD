<?
namespace App\Models;

use CodeIgniter\Model;
class ProductsModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'product_img',
        'product_name',
        'mrp',
        'discount',
        'quantity',
    ];
}
?>