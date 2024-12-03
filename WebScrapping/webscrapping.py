import requests
from bs4 import BeautifulSoup
import pandas as pd

url = "https://www.score.com.mx/shop/category/score-expertos-en-deportes-tienda-online-fitness-mancuernas-275"
response = requests.get(url)


soup = BeautifulSoup(response.content, 'html.parser')


productos = soup.select(".oe_product")
nombres_productos = []
precios = []

for producto in productos:
    try:
        nombre = producto.select_one('a[itemprop="name"]').text.strip()

        precio = producto.select_one('span.oe_currency_value').text.strip()

        precio_limpio = precio.replace("MXN", "").replace(",", "").strip()
        precio_numero = float(precio_limpio) if precio_limpio else 0.0

        nombres_productos.append(nombre)
        precios.append(precio_numero)
    except Exception as e:
        print(f"Error al procesar un producto: {e}")

data = {
    "Pesas": nombres_productos,
    "Precio Pesas": precios  
}
df = pd.DataFrame(data)

nombre_archivo = "productos_y_precios.xlsx"
df.to_excel(nombre_archivo, index=False)

print(f"Archivo '{nombre_archivo}' guardado exitosamente.")
