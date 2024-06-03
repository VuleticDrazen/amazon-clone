import { defineStore } from 'pinia'

export const useCartStore = defineStore('cart', {
    state: () => ({ cart: [], }),
    actions: {
        removeProductFromCart(productId){
            this.cart.forEach((product, index) =>{
               if (product.id === productId) this.cart.splice(index, 1)
            })
        }
    },
    persist: true
})
