export function posSelector(initBrand = '', initModel = '', initCountry = '') {
    return {
        brands: ['Brand A', 'Brand B', 'Brand C'], // replace with your brands
        models: {
            'Brand A': ['Model A1', 'Model A2'],
            'Brand B': ['Model B1', 'Model B2'],
            'Brand C': ['Model C1', 'Model C2'],
        },
        countries: ['USA', 'UK', 'Japan','Thailand'],

        selectedBrand: initBrand,
        selectedModel: initModel,
        selectedCountry: '',
        init() {
            console.log('Initial country from PHP:', initCountry);
            console.log('Available countries:', this.countries);
            console.log('Current selectedCountry:', this.selectedCountry);
            
            this.$nextTick(() => {
                console.log('After nextTick - setting country to:', initCountry);
                this.selectedCountry = initCountry;
                console.log('Selected country after set:', this.selectedCountry);
            });
        }
    }
    
}
