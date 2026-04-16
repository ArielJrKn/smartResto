	<div id="addDishModal" class="absolute hidden backdrop-blur-md inset-0 bg-black bg-opacity-50 items-center justify-center z-50">
        <div class="bg-white/10 rounded-xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-white">Ajouter un plat</h2>
                    <button onclick="closeModal('addDish')" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-gray-600">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <form class="space-y-6" action="{{route('addProduct')}}" method="POST" enctype="multipart/form-data">
                	@csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Nom du plat *</label>
                            <input type="text" name="name" class="w-full px-3 py-2 bg-white/10 text-gray-400 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Ex: Filet de bœuf grillé">
                            @error('name')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Catégorie *</label>
                            <select name="type" class="w-full px-3 py-2 bg-white/10 text-gray-400 rounded-lg text-sm pr-8 focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="Entrée">Entrées</option>
                                <option value="Plat" >Plats</option>
                                <option value="Dessert">Desserts</option>
                                <option value="Boisson">Boisson</option>
                            </select>
                            @error('type')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Description</label>
                        <textarea name="description" class="w-full px-3 py-2 bg-white/10 text-gray-400 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent" rows="3" placeholder="Description courte du plat"></textarea>
                        @error('description')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                    </div>

                            <!-- Image de couverture -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-400 mb-2">Image de couverture</label>
                        <!-- <div id="cover-image-upload" class="bg-white/10 border-2 border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center h-48 relative overflow-hidden">
                                <label for="photoUpload" class="cursor-pointer mb-4">
                                    <div class="bg-primary text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-opacity-90 transition whitespace-nowrap">
                                        <span class="w-5 h-5 flex items-center justify-center">
                                            <i class="ri-upload-2-line"></i>
                                        </span>
                                        <span>Upload Photo</span>
                                    </div>
                                    <input type="file" id="photoUpload" class="hidden" name="profile" accept="image/*">
                                </label>
                            <div id="image-preview" class=" absolute inset-0">
                                <img src="storage/images/resto.png" alt="Aperçu de l'image" class="w-full h-full object-cover">
                                <button type="button" id="remove-image" class="absolute top-2 right-2 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center text-gray-700 hover:text-red-500">
                                    <i class="ri-close-line ri-lg"></i>
                                </button>
                            </div>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Format recommandé : 1280x720px, JPG ou PNG, 2MB max.</p> -->
                        <input type="file" name="cover" class="w-full px-3 py-2 bg-white/10 text-gray-400 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
                        @error('cover')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Prix</label>
                            <div class="relative">
                                <input type="number" name="price" step="0.01" class="w-full px-3 py-2 pr-8 bg-white/10 text-gray-400 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="0.00">
                                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-sm text-gray-500">€</span>
                            </div>
                            @error('price')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Temps préparation</label>
                            <div class="relative">
                                <input type="number" name="time" class="w-full px-3 py-2 pr-8 bg-white/10 text-gray-400 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="15">
                                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-sm text-gray-500">min</span>
                            </div>
                            @error('time')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <label class="block text-sm font-medium text-gray-400">Disponible</label>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="disponible" checked="" class="sr-only peer">
                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                            </label>
                            @error('disponible')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                                <div class="p-6 flex justify-end gap-3">
                <button onclick="closeModal('addDish')" class="px-4 py-2 text-gray-400 bg-white/10 hover:bg-white/30 rounded-lg whitespace-nowrap transition-colors">
                    Annuler
                </button>
                <button type="submit" class="px-4 py-2 bg-primary text-white hover:bg-blue-600 rounded-lg whitespace-nowrap transition-colors">
                    Sauvegarder
                </button>
            </div>
                </form>
            </div>

        </div>
    </div>