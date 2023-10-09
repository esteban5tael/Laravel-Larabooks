<p class="text-gray-700 text-base mt-3">Crear Reseña</p>
                        <form action="#" method="POST" class="space-y-6 mt-2 mb-4 bg-gray-50 p-4 rounded-lg">
                            <div>
                                <label for="subject" class="text-sm text-gray-500">Asunto</label>
                                <input type="text" name="subject" id="subject" placeholder="Ingresar asunto"
                                    class="block p-4 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500" />
                            </div>

                            <div>
                                <label for="text" class="text-sm text-gray-500">Reseña</label>
                                <textarea name="text" id="text" placeholder="Ingresar reseña"
                                    class="block p-4 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500"></textarea>
                            </div>

                            <div>
                                <label for="text" class="text-sm text-gray-500 flex items-center">Calificación
                                    <span>
                                        <svg class="w-6 h-6 text-yellow-500 ml-1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </span>
                                </label>
                                <div class="flex items-center gap-5 mt-1">
                                    <div class="flex items-center gap-2">
                                        <input type="radio" name="stars" id="stars-1" value="1" />
                                        <label for="stars-1" class="text-gray-600">1</label>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <input type="radio" name="stars" id="stars-2" value="2" />
                                        <label for="stars-2" class="text-gray-600">2</label>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <input type="radio" name="stars" id="stars-3" value="3" />
                                        <label for="stars-3" class="text-gray-600">3</label>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <input type="radio" name="stars" id="stars-4" value="4" />
                                        <label for="stars-4" class="text-gray-600">4</label>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <input type="radio" name="stars" id="stars-5" value="5" />
                                        <label for="stars-5" class="text-gray-600">5</label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button
                                    class="px-4 py-2 block bg-blue-50 mx-auto rounded-full font-normal tracking-wide border-2 border-blue-600 text-blue-600 outline-none focus:outline-none hover:bg-blue-100 transition duration-200 ease-in-out">
                                    Registrar
                                </button>
                            </div>
                        </form>